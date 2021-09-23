<div class="col-sm-12 col-md-6">
    <form action="{{route('search.bill')}}" method="post">
        @csrf
        <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
            aria-controls="example1" name="keyword_submit"></label>
            <button class="btn-search" style="color: blue;
            border: 1px solid;
            border-radius: 2px" type="submit"><i
                class="fa fa-search"></i></button>
        </div>
  </form>                           
</div>