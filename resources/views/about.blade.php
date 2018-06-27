@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">About Us </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h3>Lorem Content</h3>
                        <div class="row text-justify">
                            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci, aperiam exercitationem harum illum impedit maiores minus modi nemo, nesciunt nostrum odio qui rerum sapiente sint sunt tenetur velit veritatis?</span><span>Aspernatur autem beatae delectus ipsa iure libero molestiae velit! Cumque eaque mollitia omnis placeat quidem! Adipisci cum, eaque et exercitationem ipsa iusto molestiae natus non nulla quos, reiciendis veniam vitae!</span><span>Ad alias aliquam animi aperiam, aspernatur autem corporis delectus dignissimos doloribus, explicabo illo illum ipsa laborum maiores maxime minus natus necessitatibus obcaecati perspiciatis rerum sapiente soluta suscipit veniam vero voluptatibus?</span></p>
                            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci, aperiam exercitationem harum illum impedit maiores minus modi nemo, nesciunt nostrum odio qui rerum sapiente sint sunt tenetur velit veritatis?</span><span>Aspernatur autem beatae delectus ipsa iure libero molestiae velit! Cumque eaque mollitia omnis placeat quidem! Adipisci cum, eaque et exercitationem ipsa iusto molestiae natus non nulla quos, reiciendis veniam vitae!</span><span>Ad alias aliquam animi aperiam, aspernatur autem corporis delectus dignissimos doloribus, explicabo illo illum ipsa laborum maiores maxime minus natus necessitatibus obcaecati perspiciatis rerum sapiente soluta suscipit veniam vero voluptatibus?</span></p>
                            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci, aperiam exercitationem harum illum impedit maiores minus modi nemo, nesciunt nostrum odio qui rerum sapiente sint sunt tenetur velit veritatis?</span><span>Aspernatur autem beatae delectus ipsa iure libero molestiae velit! Cumque eaque mollitia omnis placeat quidem! Adipisci cum, eaque et exercitationem ipsa iusto molestiae natus non nulla quos, reiciendis veniam vitae!</span><span>Ad alias aliquam animi aperiam, aspernatur autem corporis delectus dignissimos doloribus, explicabo illo illum ipsa laborum maiores maxime minus natus necessitatibus obcaecati perspiciatis rerum sapiente soluta suscipit veniam vero voluptatibus?</span></p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
