<x-app-layout>
<div class="container bg-warning">
    <div class="row justify-content-center">
        <div class="mt-5 mb-5 text-center col-sm-12">
            @foreach ($posts as $r)
            <h1 class="text-danger">BLOG</h1>
            <p style="font-size: 25px;">{{ $r->title }}</p>


        </div>
    </div>

   <div class="pb-5 row">
    <div class="p-5 timeline">
        <ul>
            <li>
                <div class="content">
                    <h2 class="h4"><a href="blog/{{$r->slug}}" class="text-danger text-decoration-none">{{$r->nombre}}</a></h2>
                    <p class="text-white">{{$r->description}}</p>

                </div>
            </li>

            @endforeach

        </ul>
    </div>

   </div>

</div>
<style>
    .timeline{
        margin-top: 60px;
    }
    .timeline::before{
        content: '';
        position: absolute;
        left: 50%;
        width: 2px;
        height: 100%;
        background: black;
    }
    .timeline ul{ margin: 0; padding: 0}
    .timeline ul li{
        list-style: none;
        position: relative;
        width: 50%;
        padding: 40px;
        box-sizing: border-box;
        }
    .timeline ul li:nth-child(odd){
        float: left;
        text-align: right;
        clear: both;

     }
     .timeline ul li:nth-child(even){
        float: right;
        text-align: left;
        clear: both;

     }

     .timeline ul li:nth-child(odd)::before{
         content: '';
         position: absolute;
         top: 40px;
         right: -10px;
         width: 20px;
         height: 20px;
         background: black;
         border-radius: 50%;
     }
     .timeline ul li:nth-child(even)::before{
         content: '';
         position: absolute;
         top: 40px;
         left: -10px;
         width: 20px;
         height: 20px;
         background: black;
         border-radius: 50%;
     }

</style>
</x-app-layout>
