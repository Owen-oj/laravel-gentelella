 <a href="{{$route}}" class="btn new btn-success btn-xs"
       data-id="{{isset($dataid)?$dataid:'null'}}"
       data-name="{{isset($dataname)?$dataname:'null'}}"
       data-crop="{{isset($datacrop)?$datacrop:'null'}}"
       id="{{isset($id)?$id:'addNew'}}">
        <i class="fa fa-plus"></i> {{isset($text)?$text:'Add New'}}
    </a>
