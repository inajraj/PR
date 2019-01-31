 

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="headerId" data-rowid="0" data-tripid="0" data-action="A"></h4>
      </div>
      <div class="row mt-2">
            <div class="col-sm-1"></div>
            <label for="inputFT" class="col-sm-3 col-form-label">From - To</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputFT" name="FromTo" placeholder="From - To">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-1"></div>
            <label for="inputPaid" class="col-sm-3 col-form-label">Paid</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputPaid" name="Paid" placeholder="Paid">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-1"></div>
            <label for="inputTopay" class="col-sm-3 col-form-label">ToPay</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputTopay" name="ToPay" placeholder="To Pay">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-1"></div>
            <label for="inputCooly" class="col-sm-3 col-form-label">Cooly</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputCooly" name="cooly" placeholder="Cooly">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-1"></div>
            <label for="inputUnload" class="col-sm-3 col-form-label">Unload</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputUnload" name="unload" placeholder="Unload">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-1"></div>
            <label for="inputDD" class="col-sm-3 col-form-label">DoorDelivery</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputDD" name="DoorDelivery" placeholder="DoorDelivery">
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal" id="btnSave">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>