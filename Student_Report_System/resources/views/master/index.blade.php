@extends('layouts.header')
@section("content")

    <section> <!-- main-head-section -->
        <div class="">
            <div class="row red">
                <div class="col s12 l6 deep-purple accent-1">News</div>
                <div class="col s12 l6 black">
                    <div class="col s12 m6 l12  indigo darken-1">Events</div>
                    <div class="col s12 m6 l12 blue lighten-1">Announcements</div>
                </div>
            </div>
        </div>
    </section> <!-- ./main-head-section -->

    <div class="divider"></div>

    <section> <!-- report -->
        <div class="">
            <div class="row">
                <div class="col s12">
                    <h3>Report</h3>
                </div>
                <div class="col s12 m6 lg6 pink darken-3">Report</div>
                <div class="col s12 m6 lg6 purple accent-3">Report</div>
            </div>
        </div>
    </section> <!-- ./report -->

    <div class="divider"></div>

    <section><!-- articles -->
        <div class="">
            <div class="row">
                <div class="col s12 l9">
                    <div class="col s12 m12 deep-orange lighten-3">
                    	<h5>{{ $reports[1]->title }}</h5>
                    	<p>
                            {{ $reports[1]->body }}  
                        </p>
                    </div>
                    <div class="col s12 m6 green accent-2">
                    	<h5>{{ $reports[2]->title }}</h5>
                    	<p>
                            @php
                                echo $reports[2]->body;
                            @endphp  
                        </p>
                    </div>
                    <div class="col s12 m6 light-green accent-2">
                    	<h5>{{ $reports[3]->title }}</h5>
                    	<p>
                            @php
                                echo $reports[3]->body;
                            @endphp  
                        </p>
                    </div>
                    <div class="col s12 m6 lime accent-2">
                    	<h5>{{ $reports[4]->title }}</h5>
                    	<p>
                            @php
                                echo $reports[4]->body;
                            @endphp  
                        </p>
                    </div>
                    <div class="col s12 m6 green accent-3">
                    	<h5>{{ $reports[0]->title }}</h5>
                    	<p>
                            @php
                                echo $reports[0]->body;
                            @endphp  
                        </p>
                    </div>
                    <div class="col s12 deep-orange lighten-3"><h5>Article Heading</h5></div>
                    <div class="col s12 m12 amber darken-1">Article</div>
                    <div class="col s12 m12 light-green accent-2">Article</div>
                </div>
                <aside class="col s12 l3 light-green accent-2">
                    aside
                </aside>
            </div>
        </div>
    </section><!-- ./articles -->

    <div class="divider"></div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col s12 green darken-1">
                    this is footer
                </div>
            </div>
        </div>
    </footer>

@endsection