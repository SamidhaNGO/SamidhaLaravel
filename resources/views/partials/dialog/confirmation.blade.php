<div id="statusConfirmationModal" class="modal fade">
  <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 id="confirmationMsg"></h3>
              <input type="hidden" id="confirmationVolunteerId" value="" />
              <input type="hidden" id="confirmationStatus" value="" />
              <input type="hidden" id="confirmationType" value="" />
           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
               <a onclick="getUserStatus();" class="btn btn-primary">OK</a>
           </div>
       </div>
    </div>
</div>
