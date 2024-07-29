$(document).ready(function(){
						   $("#datatable").DataTable({
													 pagingType: "simple_numbers"
													 }),
						   $("#datatable-buttons").DataTable({
															 lengthChange:!1,
															 buttons:["copy","excel","pdf","colvis"]
															 }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")});
$.fn.DataTable.ext.pager.numbers_length = 7;