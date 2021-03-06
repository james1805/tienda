@extends('store.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i> Detalle del Pedido			
			</h1>			
		</div>

		<div class="page">
			<div  class="table-responsive">
				<h3>Datos del Usuario</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr><td>Nombre:</td><td>{{ Auth::user()->name . " " . Auth::user()->last_name }}</td></tr>
					<tr><td>Usuario:</td><td>{{ Auth::user()->user }}</td></tr>
					<tr><td>Correp:</td><td>{{ Auth::user()->email }}</td></tr>
					<tr><td>Direccion:</td><td>{{ Auth::user()->address }}</td></tr>
				</table>				
			</div>
			<div class="table-responsive">
				<h3>Datos del Pedido</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<td>Producto</td>
						<td>Precio</td>
						<td>Cantidad</td>
						<td>Subtotal</td>
					</tr>
					@foreach($cart as $item)
						<tr>
							<td>{{ $item->name }}</td>
							<td>{{ number_format($item->price,2) }}</td>
							<td>{{ $item->quantity }}</td>
							<td>{{ number_format($item->price * $item->quantity,2) }}</td>
						</tr>
					@endforeach
					
				</table><hr>
				<h3>
					<span class="label label-default">
						Total: ${{ number_format($total,2) }}		
					</span>
				</h3><hr>
				<p>
					<a href="{{ route('cart-show') }}" class="btn btn-primary"><i class="fa fa-chevron-circle-left"></i> Regresar</a>
					
					<a href="{{ route('payment') }}" class="btn btn-primary"> Pagar con Paypal <i class="fa fa-chevron-circle-right"></i></a>
				</p>				
			</div>			
		</div>		
	</div>
@stop