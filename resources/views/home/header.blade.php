<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Welcome to {{$setting->title}}</h2>
        <p class="col-12 text-center">{{$setting->aboutus}}.</p>
    </header>
    <div class="tm-paging-links">
        <nav>
            <ul>
                <li class="tm-paging-item"><a href="#" class="tm-paging-link active"
                                              id="all">All</a>
                </li>
                @foreach($data as $rs)
                    <li class="tm-paging-item"><a href="#" class="tm-paging-link"
                                                  id='{{$rs->title}}'>{{$rs->title}} </a>
                    </li>

                @endforeach
            </ul>
        </nav>
    </div>

    <!-- Gallery -->
    <div class="row tm-gallery">
        <!-- gallery page 1 -->
        <div class="tm-gallery-page">
            @foreach($product as $rs)
                <article
                    class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item product animate {{\App\Http\Controllers\CategoryController::getParentsTree($rs->category, $rs->category->id)}}"
                    id="{{\App\Http\Controllers\CategoryController::getParentsTree($rs->category, $rs->category->id)}}">
                    <figure>
                        <img src="{{Storage::url($rs->image)}}" alt="Image"
                             class="img-fluid tm-gallery-img"/>
                        <figcaption>
                            <h4 class="tm-gallery-title">{{$rs->title}}</h4>
                            <p class="tm-gallery-description">{{$rs->description}}</p>
                            <p class="tm-gallery-price">{{$rs->keywords}}</p>
                        </figcaption>
                    </figure>
                </article>
            @endforeach

        </div> <!-- gallery page 1 -->
    </div>

</main>


<script>


    let categoryList = [];
    @foreach($data as $rs)
    categoryList.push('{{$rs->title}}')
    @endforeach

    let productId = [];
    @foreach($product as $rs)
    productId.push('{{\App\Http\Controllers\CategoryController::getParentsTree($rs->category, $rs->category->id)}}')
    @endforeach

    let productCategory = [];
    @foreach($product as $rs)
    productCategory.push('{{\App\Http\Controllers\CategoryController::getParentsTree($rs->category, $rs->category->title)}}')
    @endforeach


    console.log(productCategory);
    for (let i = 0; i < productCategory.length; i++) {
        const category = document.getElementById(categoryList[i]);

        function categoryEvent() {
            category?.addEventListener("click", function () {

                Array.from(productCategory).forEach((item, i) => {

                    const productCateg = document.getElementsByClassName('product');
                    productCateg[i].style.display = 'none';
                    if (category.id === productCategory[i]) {
                        productCateg[i].style.display = 'block';
                    }


                })
            })
        }

        categoryEvent();

    }

    const allCategory = document.getElementById('all');
    allCategory.addEventListener('click', e => {
        Array.from(productCategory).forEach((item, i) => {
            const produc = document.getElementsByClassName('product');
            produc[i].style.display = 'block';


        })
    })


</script>
