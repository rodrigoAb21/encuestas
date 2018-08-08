<!-- Modal -->
<div class="modal fade" id="myModal-{{$encuestador->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="{{ url('encuestadores/'.$encuestador->id) }}" autocomplete="off">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Eliminar encuestador</h4>
                </div>
                <div class="modal-body">
                    Esta seguro de eliminar al encuestador {{$encuestador -> name}} {{$encuestador -> apellido}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>