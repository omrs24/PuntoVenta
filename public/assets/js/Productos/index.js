$(document).ready(function(){

    $("#tbProductos").on('click','.btnedit',function(){
        //alert("clicked " + $(this).attr("data-id"));
        $("#editModal").show();
    });
    
    $("#tbProductos").DataTable({
		language: lang_ES_EN,
        ajax : {
            url : getAllProducts,
            type : "GET",
            dataSrc: ""
        },
        columnDefs: [
        	{
                className: ["dt-center"], 
                targets: "_all"
            },
            {
                className: "text-left",
                targets: [4,5]
            },
            {"render" : function(data, type, row){
                                return `<button type='button' class='btnedit btn' data-id="${data}"
                                data-bs-toggle='modal' data-bs-target='#editModal'><i class="bi bi-pencil-square"></i></button>`;
                        }, "targets" : 0 },
        	{"render" : function(data, type, row){
				        		return "<span class='id'>" + data + "</span>";
				   		}, "targets" : 1 },
        	{"render" : function(data, type, row){
				        		return "<span class='name'>" + data + "</span>";
				   		}, "targets" : 2 },
        	{"render" : function(data, type, row){
				        		return "<span class='reference'>" + data + "</span>";
				   		}, "targets" : 3 },
        	{"render" : function(data, type, row){
				        		return "<span class='inventory'>" + data + "</span>";
				   		}, "targets" : 4 },
        	{"render" : function(data, type, row){
				        		return "<span class='cost'>$" + data + "</span>";
				   		}, "targets" : 5 },
        	{"render" : function(data, type, row){
				        		return "<span class='price'>$" + data + "</span>";
				   		}, "targets" : 6 },
            {"render" : function(data, type, row){
				        		return "<span class='vname'>" + data + "</span>";
				   		}, "targets" : 7 },
            {"render" : function(data, type, row){
				        		return "<span class='mname'>" + data + "</span>";
				   		}, "targets" : 8 },
            {"render" : function(data, type, row){
				        		return "<span class='cname'>" + data + "</span>";
				   		}, "targets" : 9 },
      	],
        columns : [
            { "data": "ID" },
            { "data": "ID" },
            { "data": "name" },
            { "data": "reference" },
            { "data": "inventory" },
            { "data": "cost" },
            { "data": "price1" },
            { "data": "vname" },
            { "data": "mname" },
            { "data": "cname" },
        ]
	});

    

    var lang_ES_EN = {
        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    };

});