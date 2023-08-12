                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Posts recents</h3>
                        </div>
                        @forelse ($posts as $post)

                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{asset($post->img_path)}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="{{route('blog.detail',['id'=>$post->id])}}" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">{{$post->title}}</a>
                        </div>
                        @empty
                           <div>Aucun post recent</div>
                        @endforelse
                    </div>
                    <!-- Recent Post End -->

                    <!-- Image Start -->
                    @if (count($posts)!=0)
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="{{asset('img/blog-1.jpg')}}" alt="" class="img-fluid rounded">
                    </div>
                    @endif

                    <!-- Image End -->
