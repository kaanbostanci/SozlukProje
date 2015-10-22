@extends('backend.mod.layout.master')
@section('breadcrumb')
<li>
    <a href="{{ URL::to('modentry/entrylistele') }}">Entry Listele</a>
</li>
@stop
@section('alttitle')
<h1 id="main-heading">
    Entry Listele <span>Bu Kısımdan Sistemde Bulunan Tüm Entryleri Listeleyebilirsiniz</span>
</h1>
@stop
@section('content')
<div class="row-fluid">

    <div class="span12 widget">
        <div class="widget-header">
            <span class="title">Entry Listesi</span>
        </div>
        <div class="widget-content table-container">
            <table class="table table-striped data">
                <thead>
                    <tr>
                        <th>Entry Adı</th>
                        <th width="10%">İşlemler</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($entry as $entrys)
                    <tr>
                        <td>{{$entrys->content}}</td>
                    <td width="10%">
                        <a href="{{ URL::to('modentry/entryduzenle/'.$entrys->id.'') }}" class="btn btn-mini btn-primary">Düzenle</a>
                        <a onclick="return confirm('Seçili Entry Silmek İstediğinizden Eminmisiniz ? ')" href="{{ URL::to('modentry/entrysil/'.$entrys->id.'') }}" class="btn btn-mini btn-danger">Sil</a>
                    </td>
                    </tr>
                    @endforeach

                    </tbody>
            </table>
        </div>
    </div>

</div>


@stop




<!-- Bu kısım bu viewe ait css dosyaları -->
@section('css')


@stop




<!-- Bu kısım bu viewe ait js dosyaları -->
@section('js')
<!-- DataTables -->
<script src="{{ URL::to('Backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::to('Backend/plugins/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{ URL::to('Backend/plugins/ibutton/jquery.ibutton.min.js') }}"></script>

@stop