@extends('errors::minimal')

@section('title', __('Inaccesible'))
@section('code', '403')
@section('message', 'ACCESO NO CONCEDIDO, FAVOR DE CONTACTAR A SU ASESOR PROESSA',__($exception->getMessage() ?: 'Inaccesible'))
