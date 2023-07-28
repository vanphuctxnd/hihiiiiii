@extends('front.layout.master')
@section('title', 'FAQ')
@section('body')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>FAQs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- FAG Section Begin -->
    <div class="faq-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-accordin">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading active">
                                    <a class="active" data-toggle="collapse" data-target="#collapseOne">
                                        Is There Anything I Should Bring?
                                    </a>
                                </div>
                                <div class="collapse show" id="collapseOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto officia explicabo optio repudiandae consectetur
                                             molestiae unde fuga sed voluptatum ad atque, accusantium aperiam ducimus commodi, dolores error eveniet pariatur at.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseTwo">
                                        Where Can I Find The Wall Street Journal?
                                    </a>
                                </div>
                                <div class="collapse" id="collapseTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto officia explicabo optio repudiandae consectetur
                                             molestiae unde fuga sed voluptatum ad atque, accusantium aperiam ducimus commodi, dolores error eveniet pariatur at.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseThree">
                                        Where Can I Find Market Research Reports?
                                    </a>
                                </div>
                                <div class="collapse" id="collapseThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto officia explicabo optio repudiandae consectetur
                                             molestiae unde fuga sed voluptatum ad atque, accusantium aperiam ducimus commodi, dolores error eveniet pariatur at.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAG Section End -->

@endsection