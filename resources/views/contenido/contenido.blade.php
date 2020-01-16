@extends('principal')
@section('contenido')
  <template v-if="menu==0">
    <Producto></Producto>
  </template>
  <template v-if="menu==1">
    <Entrada></Entrada>
  </template>
  <template v-if="menu==2">
    <Salida></Salida>
  </template>
  
@endsection