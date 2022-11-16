@extends('main.index')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Productos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Productos</a></li>
                <li class="breadcrumb-item active">Ver todos</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">

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
                                <h5 class="card-title">Productos <span>/Todos</span></h5>

                                <table id="tbProductos" name="tbProductos" class="table table-striped w-100">
                                    <thead>
                                        <tr>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Codigo</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Costo</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Proveedor</th>
                                            <th scope="col">Marca</th>
                                            <th scope="col">Categoria</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Reports -->

                </div>
            </div>

        </div>


    </section>

</main>


<!-- Hidden Elements -->

<!-- Modal -->

<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl p-5">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Actualizar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3 justify-content-between py-2">
                    <div class="col-5">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="txtTitulo" placeholder="Nombre del producto">
                            <label for="txtTitulo" class="form-label">Nombre del producto</label>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="txtCodigoBarras" placeholder="Codigo de barras">
                            <label for="txtCodigoBarras" class="form-label">Codigo de barras</label>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-xl-12 py-2">
                        <div class="form-floating">
                            <textarea id="txtDescripcion" cols="30" rows="10" class="form-control" placeholder="Descripcion"></textarea>
                            <label for="txtDescripcion" class="form-label">Descripcion</label>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-floating">
                            <select id="ddlProveedor" class="form-control" aria-label="Proveedor"></select>
                            <label for="ddlProveedor" class="form-label">Proveedor</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating">
                            <select id="ddlMarca" class="form-control" aria-label="Marca"></select>
                            <label for="ddlMarca" class="form-label">Marca</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating">
                            <select id="ddlCategoria" class="form-control" aria-label="Categoria"></select>
                            <label for="ddlCategoria" class="form-label">Categoria</label>
                        </div>
                    </div>

                    <div class="col-4 py-2">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="txtCosto" placeholder="Costo">
                            <label for="txtCosto" class="form-label">Costo</label>
                        </div>
                    </div>
                    <div class="col-4 py-2">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="txtPrecio" placeholder="Precio">
                            <label for="txtPrecio" class="form-label">Precio</label>
                        </div>
                    </div>
                    <div class="col-4 py-2">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="txtCantidad" placeholder="Cantidad">
                            <label for="txtCantidad" class="form-label">Cantidad</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    var getAllProducts = "{{ URL::route('getAllProducts') }}"
</script>
<script src="{{ asset('assets/js/Productos/index.js') }}"></script>
@endsection