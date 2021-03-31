<!-- Modal -->
<div class="modal fade" id="exception_modal" tabindex="-1" role="dialog" aria-labelledby="exception_modalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exception_modalLabel" style="font-weight: 700;">Exception Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card" >
                    <div class="card-header" id="username" style="font-weight: 700;padding: 10px;">
                        User Name :
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" id="url" style="font-weight: 500;padding: 10px;word-wrap: break-word;">
                            <p>Url :</p>
                        </li>
                        <li class="list-group-item" id="file" style="font-weight: 500;padding: 10px;word-wrap: break-word;">
                            <p>File :</p>
                        </li>
                        <li class="list-group-item" id="message" style="font-weight: 500;padding: 10px;word-wrap: break-word;">
                            <p>Message :</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>
