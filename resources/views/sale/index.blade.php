@extends('main.index')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Venta</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Ventas</a></li>
                <li class="breadcrumb-item active">Venta</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">

                    <div class="col-md-12">

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card overflow-auto">

                                <div class="filter d-none">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body" style="font-size:12px;">
                                    <h5 class="card-title">Buscar Productos <span>/Todos</span></h5>

                                    <div class="row mb-5">
                                        <div class="col-lg-12">
                                            <div class="form-floating" id="divBuscarProd">
                                                <input type="text" class="form-control" id="txtBuscarProd" placeholder="Buscar Productos">
                                                <label for="txtBuscarProd" class="form-label">Buscar Productos</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">

                                            <div class="col-md-12">
                                                <table id="tbProdsResume" class="table table-borderless table-hover w-100">
                                                    <thead class="border-bottom">
                                                        <tr style="border:0;">
                                                            <th>ID</th>
                                                            <th>Imagen</th>
                                                            <th>Titulo</th>
                                                            <th>Precio</th>
                                                            <th>Cantidad</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        {{-- Style to disappear start border on 990px  --}}
                                        <style>
                                            @media (max-width:990px) {
                                                .border-start {
                                                    border: 0px solid !important
                                                }
                                            }
                                        </style>
                                        <div class="col-lg-4 border-start">
                                            <div id="products-cart" class="products-cart">
                                            </div>

                                            <div class="saleresume position-absolute bottom-0">
                                                <div class="row">
                                                    <div class="col-8 text-end">
                                                        <div class="col-12">
                                                            <h5>Subtotal:</h5>
                                                        </div>
                                                        <div class="col-12">
                                                            <h5>IVA:</h5>
                                                        </div>
                                                        <div class="col-12">
                                                            <h5>Total:</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">

                                                    </div>
                                                </div>

                                                <div class="row m-2">
                                                    <div class="col-12">
                                                        <button type="button" class="btn btn-primary ">Finalizar Venta</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Reports -->

                    </div>

                </div>
            </div>

        </div>


    </section>

</main>


@endsection

@section('scripts')
<script>
    var getAllProducts = "{{ URL::route('getAllProducts') }}";
    var getProduct = "{{ URL::route('getProduct') }}";
    var csfr_token = "{{ csrf_token() }}"
</script>
<script src="{{ asset('assets/js/Productos/sale.js') }}""></script>
@endsection