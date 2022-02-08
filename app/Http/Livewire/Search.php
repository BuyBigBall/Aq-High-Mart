<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Support\Facades\Cookie;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    protected   $listeners = ['set-order'=>'setOrder'];
    protected   $result;
    public      $view_mode;

    public      $SortOrder;                 // model
    public      $perPage = 12;
    public      $curPage = 1;
    public      $lastPage = 1;
    public      $nextPage = 1;
    public      $prevPage = 1;
    public      $search_input;
    private     $search_result;
    public      $current_route = 'search';  //for pagination jump
        
    public function __construct()
    {
        $this->result = [];
        parent::__construct();
    }
    
    public function mount(Request $request)
    {
        if (Cookie::has('view_mode'))  
            $this->view_mode =  Cookie::get('view_mode');
        else
            $this->view_mode = 'gridview';
    }

    public function setOrder($ordernum)
    {
        $this->SortOrder = $ordernum;
    }

    public function setviewmode( $viewmode )
    {
        Cookie::queue('view_mode', $viewmode, 3600*24*5 );
        $this->view_mode =  $viewmode;
    }

    public function updatedCurPage($pagenum)
    {
        if($pagenum<=0)                 $pagenum = 1;
        if($pagenum>$this->lastPage)    $pagenum = $this->lastPage;

        $this->curPage = $pagenum;

        dd($pagenum);
    }
    public function render()
    {
        $categories           = Category::with(['subcategory', 'subsubcategory', 'products'])->orderBy('category_name_en', 'ASC')->get();
        $sliders              = Slider::where('slider_name', '=', 'Main-Slider')->where('slider_status', '=', 1)->limit(3)->get();

        $skip_category_0 = Category::skip(0)->first();
        $skip_category_products_0   = Product::where('category_id', $skip_category_0->id)
                        ->where('status', 1)
                        ->latest()->limit(20)->get();

        $skip_brand_0 = Brand::skip(0)->first();
        $skip_brand_products_0      = Product::where('brand_id', $skip_brand_0->id)
                        ->where('status', 1)
                        ->latest()->limit(20)->get();

        // dd($this->categories);
        $selcateid = 0;
        $selcatename = '分类';
        $searchword = '';
        $request = Request::capture();
        if( !empty($request->cateid))   
        {
            $selcateid = $request->cateid;
            $selcatename = Category::find($selcateid)->category_name_bn;
        }
        if( !empty($request->word))     $searchword = $request->word;
        $this->search_input = $searchword;

        $query = Product::where('status', 1);
        if( !empty($request->cateid))
        {
            $query->where('category_id', $request->cateid);
        }
        if( !empty($request->word))
        {
            $query->where('product_name_bn', 'like', '%'.$request->word.'%');
        }
        
        if(!empty($this->SortOrder) && $this->SortOrder==2)
            $query->orderBy('selling_price','ASC');
        else if(!empty($this->SortOrder) && $this->SortOrder==3)
            $query->orderBy('selling_price','DESC');
        else if(!empty($this->SortOrder) && $this->SortOrder==4)
            $query->orderBy('product_name_bn','ASC');
        else 
            $query->orderBy('created_at','DESC');

        $query->orderBy('id','DESC');
        //$this->result = $query->paginate(12);

        $this->search_result = $query->paginate( $this->perPage );
        $this->curPage = $this->search_result->currentPage();
        $this->lastPage = $this->search_result->lastPage();
        $this->prevPage = $this->search_result->currentPage()-3;
            if($this->prevPage<=0)  $this->prevPage = 1;
        $this->nextPage = $this->search_result->currentPage() + 3 + 2;
            if($this->nextPage>$this->lastPage)  $this->nextPage = $this->lastPage;

        //dd( $this->search_result);
        return view('livewire.search')
            ->extends('frontend.frontend_master'
                    , compact(
                            'categories',
                            'sliders',
                            'skip_category_0',
                            'skip_category_products_0',
                            'skip_brand_0',
                            'skip_brand_products_0',
                            'selcateid', 'selcatename',
                            'searchword'
                            ) )
            ->section('frontend_content')
            ->with('categories'               , $categories)
            ->with('view_mode'                , $this->view_mode)
            ->with('pagination'               , $this->search_result    )
            ;
    }
}
