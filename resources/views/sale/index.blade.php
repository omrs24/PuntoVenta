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

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-floating" id="divBuscarProd">
                                                <input type="text" class="form-control" id="txtBuscarProd" placeholder="Buscar Productos">
                                                <label for="txtBuscarProd" class="form-label">Buscar Productos</label>
                                            </div>

                                            <div class="col-md-12 my-5">
                                                <table id="tbProdsResume" class="table table-borderless datatable dataTable-table table-hover w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>Imagen</th>
                                                            <th>Titulo</th>
                                                            <th>Descripcion</th>
                                                            <th>Marca</th>
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
                                            <div class="products-cart">

                                                <div class="row py-1">
                                                    <div class="col-4">
                                                        <img src="{{ asset('assets/img/product-1.jpg') }}" width="70" height="70" alt="" srcset="">
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="itemTitulo">
                                                            <span class="itemTitulo">Titulo del producto</span>
                                                            Donitas Bimbo
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="itemcantidad">
                                                            <i class="bi bi-plus-circle"></i>
                                                            <span class="itemCantidad">1</span>
                                                            <i class="bx bx-minus"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row py-1">
                                                    <div class="col-4">
                                                        <img src="{{ asset('assets/img/product-2.jpg') }}" width="70" height="70" alt="" srcset="">
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="itemTitulo">
                                                            <span class="itemTitulo">Titulo del producto</span>
                                                            Coca Cola 600ml
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="itemcantidad">
                                                            <i class="bi bi-plus-circle"></i>
                                                            <span class="itemCantidad">1</span>
                                                            <i class="bx bx-minus"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row py-1">
                                                    <div class="col-4">
                                                        <img src="{{ asset('assets/img/product-3.jpg') }}" width="70" height="70" alt="" srcset="">
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="itemTitulo">
                                                            <span class="itemTitulo">Titulo del producto</span>
                                                            Doritos Nacho
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="itemcantidad">
                                                            <i class="bi bi-plus-circle"></i>
                                                            <span class="itemCantidad">1</span>
                                                            <i class="bx bx-minus"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row py-1">
                                                    <div class="col-4">
                                                        <img src="{{ asset('assets/img/product-1.jpg') }}" width="70" height="70" alt="" srcset="">
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="itemTitulo">
                                                            <span class="itemTitulo">Titulo del producto</span>
                                                            Pelon
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="itemcantidad">
                                                            <i class="bi bi-plus-circle"></i>
                                                            <span class="itemCantidad">1</span>
                                                            <i class="bx bx-minus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-8 text-end">
                                                    <div class="col-lg-12">
                                                        <h5>Subtotal:</h5>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <h5>IVA:</h5>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <h5>Total:</h5>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    
                                                </div>
                                            </div>

                                            <div class="row m-0 p-0">
                                                <button type="button" class="btn btn-primary py-4"><p class="h1">Finalizar Venta</p></button>
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
    var getAllProducts = "{{ URL::route('getAllProducts') }}"
</script>
<script src="{{ asset('assets/js/Productos/sale.js') }}""></script>
@endsection