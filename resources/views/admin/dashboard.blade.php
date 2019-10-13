@extends('admin.sidebar')

@section('contenido')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>This is main title</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">This is</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Breadcrumb</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <a href="" class="btn btn-primary">This is action area</a>
        </div>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Header example</h5>
                </div>
                <div class="ibox-content">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi facere recusandae earum dignissimos consectetur iste, excepturi voluptatum esse, deserunt similique, praesentium omnis assumenda asperiores incidunt architecto iure exercitationem ad perspiciatis.
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
