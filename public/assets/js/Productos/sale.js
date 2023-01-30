$(document).ready(function () {
    /**
     * Change text form Datatable to Spanish
     */
    var lang_ES_EN = {
        "processing": "Procesando...",
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "emptyTable": "Ningún dato disponible en esta tabla",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "search": "Buscar:",
        "infoThousands": ",",
        "loadingRecords": "Cargando...",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
        "aria": {
            "sortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sortDescending": ": Activar para ordenar la columna de manera descendente"
        },
        "buttons": {
            "copy": "Copiar",
            "colvis": "Visibilidad",
            "collection": "Colección",
            "colvisRestore": "Restaurar visibilidad",
            "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
            "copySuccess": {
                "1": "Copiada 1 fila al portapapeles",
                "_": "Copiadas %ds fila al portapapeles"
            },
            "copyTitle": "Copiar al portapapeles",
            "csv": "CSV",
            "excel": "Excel",
            "pageLength": {
                "-1": "Mostrar todas las filas",
                "_": "Mostrar %d filas"
            },
            "pdf": "PDF",
            "print": "Imprimir",
            "renameState": "Cambiar nombre",
            "updateState": "Actualizar",
            "createState": "Crear Estado",
            "removeAllStates": "Remover Estados",
            "removeState": "Remover",
            "savedStates": "Estados Guardados",
            "stateRestore": "Estado %d"
        },
        "autoFill": {
            "cancel": "Cancelar",
            "fill": "Rellene todas las celdas con <i>%d<\/i>",
            "fillHorizontal": "Rellenar celdas horizontalmente",
            "fillVertical": "Rellenar celdas verticalmentemente"
        },
        "decimal": ",",
        "searchBuilder": {
            "add": "Añadir condición",
            "button": {
                "0": "Constructor de búsqueda",
                "_": "Constructor de búsqueda (%d)"
            },
            "clearAll": "Borrar todo",
            "condition": "Condición",
            "conditions": {
                "date": {
                    "after": "Despues",
                    "before": "Antes",
                    "between": "Entre",
                    "empty": "Vacío",
                    "equals": "Igual a",
                    "notBetween": "No entre",
                    "notEmpty": "No Vacio",
                    "not": "Diferente de"
                },
                "number": {
                    "between": "Entre",
                    "empty": "Vacio",
                    "equals": "Igual a",
                    "gt": "Mayor a",
                    "gte": "Mayor o igual a",
                    "lt": "Menor que",
                    "lte": "Menor o igual que",
                    "notBetween": "No entre",
                    "notEmpty": "No vacío",
                    "not": "Diferente de"
                },
                "string": {
                    "contains": "Contiene",
                    "empty": "Vacío",
                    "endsWith": "Termina en",
                    "equals": "Igual a",
                    "notEmpty": "No Vacio",
                    "startsWith": "Empieza con",
                    "not": "Diferente de",
                    "notContains": "No Contiene",
                    "notStartsWith": "No empieza con",
                    "notEndsWith": "No termina con"
                },
                "array": {
                    "not": "Diferente de",
                    "equals": "Igual",
                    "empty": "Vacío",
                    "contains": "Contiene",
                    "notEmpty": "No Vacío",
                    "without": "Sin"
                }
            },
            "data": "Data",
            "deleteTitle": "Eliminar regla de filtrado",
            "leftTitle": "Criterios anulados",
            "logicAnd": "Y",
            "logicOr": "O",
            "rightTitle": "Criterios de sangría",
            "title": {
                "0": "Constructor de búsqueda",
                "_": "Constructor de búsqueda (%d)"
            },
            "value": "Valor"
        },
        "searchPanes": {
            "clearMessage": "Borrar todo",
            "collapse": {
                "0": "Paneles de búsqueda",
                "_": "Paneles de búsqueda (%d)"
            },
            "count": "{total}",
            "countFiltered": "{shown} ({total})",
            "emptyPanes": "Sin paneles de búsqueda",
            "loadMessage": "Cargando paneles de búsqueda",
            "title": "Filtros Activos - %d",
            "showMessage": "Mostrar Todo",
            "collapseMessage": "Colapsar Todo"
        },
        "select": {
            "cells": {
                "1": "1 celda seleccionada",
                "_": "%d celdas seleccionadas"
            },
            "columns": {
                "1": "1 columna seleccionada",
                "_": "%d columnas seleccionadas"
            },
            "rows": {
                "1": "1 fila seleccionada",
                "_": "%d filas seleccionadas"
            }
        },
        "thousands": ".",
        "datetime": {
            "previous": "Anterior",
            "next": "Proximo",
            "hours": "Horas",
            "minutes": "Minutos",
            "seconds": "Segundos",
            "unknown": "-",
            "amPm": [
                "AM",
                "PM"
            ],
            "months": {
                "0": "Enero",
                "1": "Febrero",
                "10": "Noviembre",
                "11": "Diciembre",
                "2": "Marzo",
                "3": "Abril",
                "4": "Mayo",
                "5": "Junio",
                "6": "Julio",
                "7": "Agosto",
                "8": "Septiembre",
                "9": "Octubre"
            },
            "weekdays": [
                "Dom",
                "Lun",
                "Mar",
                "Mie",
                "Jue",
                "Vie",
                "Sab"
            ]
        },
        "editor": {
            "close": "Cerrar",
            "create": {
                "button": "Nuevo",
                "title": "Crear Nuevo Registro",
                "submit": "Crear"
            },
            "edit": {
                "button": "Editar",
                "title": "Editar Registro",
                "submit": "Actualizar"
            },
            "remove": {
                "button": "Eliminar",
                "title": "Eliminar Registro",
                "submit": "Eliminar",
                "confirm": {
                    "_": "¿Está seguro que desea eliminar %d filas?",
                    "1": "¿Está seguro que desea eliminar 1 fila?"
                }
            },
            "error": {
                "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
            },
            "multi": {
                "title": "Múltiples Valores",
                "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
                "restore": "Deshacer Cambios",
                "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
            }
        },
        "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
        "stateRestore": {
            "creationModal": {
                "button": "Crear",
                "name": "Nombre:",
                "order": "Clasificación",
                "paging": "Paginación",
                "search": "Busqueda",
                "select": "Seleccionar",
                "columns": {
                    "search": "Búsqueda de Columna",
                    "visible": "Visibilidad de Columna"
                },
                "title": "Crear Nuevo Estado",
                "toggleLabel": "Incluir:"
            },
            "emptyError": "El nombre no puede estar vacio",
            "removeConfirm": "¿Seguro que quiere eliminar este %s?",
            "removeError": "Error al eliminar el registro",
            "removeJoiner": "y",
            "removeSubmit": "Eliminar",
            "renameButton": "Cambiar Nombre",
            "renameLabel": "Nuevo nombre para %s",
            "duplicateError": "Ya existe un Estado con este nombre.",
            "emptyStates": "No hay Estados guardados",
            "removeTitle": "Remover Estado",
            "renameTitle": "Cambiar Nombre Estado"
        }
    };

    /**
     * Product Table define and populate
     */
    var sTable = $("#tbProdsResume").DataTable({
        language: lang_ES_EN,
        ajax: {
            url: getAllProducts,
            type: "GET",
            dataSrc: ""
        },
        dom: '<"clear">',
        columnDefs: [
            {
                className: ["dt-center"],
                targets: "_all"
            },{
                className: ["text-start"],
                targets: 3
            },
            {
                className: "d-none",
                targets: 0
            },
            {
                className: "text-primary fw-bold",
                targets: 2
            },
            {
                "render": function (data, type, row) {
                    return `<span class="prodId" data-id="${data}">${data}</span>`;
                }, "targets": 0
            },
            {
                "render": function (data, type, row) {
                    return `<img src="${data}" alt="${data}" width="80">`;
                }, "targets": 1
            },
            {
                "render": function (data, type, row) {
                    return "<span class='name'>" + data + "</span>";
                }, "targets": 2
            },
            {
                "render": function (data, type, row) {
                    return "<span class='price'><span>$</span> " + Number(data).toFixed(2) + "</span>";
                }, "targets": 3
            },
            {
                "render": function (data, type, row) {
                    return "<span class='inventory'>" + data + "</span>";
                }, "targets": 4
            }
        ],
        columns: [
            { "data": "ID" },
            { "data": "image" },
            { "data": "name" },
            { "data": "price1" },
            { "data": "inventory" }
        ],
        rowCallback: function (row, data) {
            $(row).addClass('cursor-pointer');
        }
    });

    /**
     * On Input:text text change
     */
    $("#txtSearchProd").on('input', function () {
        sTable.search($(this).val()).draw();
    });

    /**
     * On paste event
     */
    $(document).bind("paste", function(e){
        var pastedData = e.originalEvent.clipboardData.getData('text');
        $("#txtSearchProd").val(pastedData);
        sTable.search($("#txtSearchProd").val()).draw();
    } );

    /**
     * On Product Table row click
     */
    $("#tbProdsResume tbody").on("click", "tr", function(e){
        var id = $(this).closest("tr").find(".prodId").attr("data-id");

        //Despues de obtener el id del producto obtener info del producto y agergar a carrito
        
        $.ajax({
            url: getProduct,
            type: "post",
            data: {
                _token: csfr_token,
                q: id
            },
            success: function(result) {
                //Agregar fila con el contenido del producto
                var row = `<div class="row py-1" prod-id="${ result[0].id }">
                    <div class="col-4">
                        <img src="${ result[0].image }" width="70" height="70" alt="" srcset="" prod-id="${ result[0].id }">
                    </div>
                    <div class="col-4">
                        <div class="itemTitle">
                            <span class="sitemTitle" prod-id="${ result[0].ID }">${ result[0].name }</span>
                            ${ result[0].detail}
                        </div>
                    </div>
                    <div class="col-4">
                        <div id="itemQuantity" class="itemQuantity" prod-id="${ result[0].ID }">
                            <i class="btnChQuant bx bx-minus" style="cursor:pointer;" 
                                data-type="de" prod-id="${ result[0].ID }"></i>
                            
                            <span class="sitemQuantity" prod-id="${ result[0].ID }" >0</span>
                            
                            <i class="btnChQuant bi bi-plus-circle" style="cursor:pointer;" 
                            data-type="in" prod-id="${ result[0].ID }" max="${result[0].inventory}"></i>
                        </div>
                    </div>
                </div>`;
                
                $("#products-cart").append(row);
            }
        })
    });

    /**
     * 
     * Al presionar boton de incremento o decremento en producto
     * Se agrega document para que los elementos creados dynamicamente entren dentro del eventhandler Clicked
     * 
     */
    
    $(document).on("click",".btnChQuant",function(e){
        
        e.preventDefault();

        var button = $(this);
        var prod_id = $(this).attr("prod-id");
        var oldValue = $(`[prod-id='${prod_id}']`).find(".sitemQuantity").html();
        
        console.log("prod-id: " + prod_id);
        console.log("oldValue: " + oldValue);

        if (button.attr('data-type') == "in") {
            var newVal = parseFloat(oldValue) + 1;
            if(newVal > button.attr('max')){
                alert("Cantidad en inventario no suficiente");
                return
            }

        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        console.log("newVal: " + newVal);
        $(`[prod-id='${prod_id}']`).find(".sitemQuantity").html(newVal);
    });

});