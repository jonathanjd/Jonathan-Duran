 <section class="p-b-0">
            <div class="container">
                <div class="text-center">
                    <h3 class="text-medium m-b-5">Diseños Web</h3>
                    <p>Nos enfocamos en diseños de páginas web limpias, bien estructuradas y de fácil navegación.
                    </p>
                </div>
            </div>
            <hr class="space">
            <div class="portfolio">
                <!-- Portfolio Items -->
                <div id="isotope" class="isotope portfolio-items" data-isotope-item-space="0" data-isotope-mode="masonry" data-isotope-col="4" data-isotope-item=".portfolio-item">

                    @foreach($designs as $design)

                        <div class="portfolio-item design beauty">
                            <div class="image-box effect victor"> <img src="{{ asset('design/'.$design->image) }}" alt="">
                                <div class="image-box-content">
                                    <h3>{{ $design->name }}</h3>
                                    <p>{{ str_limit($design->content,100) }}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    
                </div>
            </section>