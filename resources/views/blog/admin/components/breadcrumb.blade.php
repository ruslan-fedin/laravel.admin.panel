<h1>
    @if (isset($title)){{$title}}@endif
</h1>
<ol class="breadcrumb">
    <li><a href="{{route('blog.admin.index.index')}}"><i class="fa fa-dashboard">{{$parent}}</i></a></li>
    @if (isset($order))
        <li><a href=""><i></i></a>{{$order}}</li>
    @endif
    @if (isset($category))
        <li><a href=""><i></i></a>{{$category}}</li>
    @endif
    @if (isset($user))
        <li><a href=""><i></i></a>{{$user}}</li>
    @endif
    @if (isset($product))
        <li><a href=""><i></i></a>{{$product}}</li>
    @endif
    @if (isset($group_filter))
        <li><a href=""><i></i></a>{{$group_filter}}</li>
    @endif
    @if (isset($attr_filter))
        <li><a href=""><i></i></a>{{$attr_filter}}</li>
    @endif
    @if (isset($currency))
        <li><a href=""><i></i></a>{{$currency}}</li>
    @endif
    <li><i class="active"></i>{{$active}}</li>

</ol>

