{{-- <div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                    <li class="breadcrumb-item"><a href="{{$sectionUrl}}">{{$section}}</a></li>
                    @foreach ($midSections as $key=>$value)
                    <li class="breadcrumb-item"><a href="{{$key}}">{{$value}}</a></li>
                    @endforeach
                    <li class="breadcrumb-item active">{{$title}}</li>
                </ol>
            </div>
            <h4 class="page-title">{{$title}}</h4>
        </div>
    </div>
</div> --}}



<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-start mb-0">{{$title}}</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">{{__('messages.user')}}</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{$sectionUrl}}">{{$section}}</a>
                    </li>
                    <li class="breadcrumb-item active">{{$title}}
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>