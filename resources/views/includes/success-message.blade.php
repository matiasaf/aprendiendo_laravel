
@if (session('status'))

<div class="row">
  <div class="col s3">
  </div>
   <div class="col s6 m6">
     <div class="card blue-grey darken-1 centered">
       <div class="card-content white-text">
         <span class="card-title">¡Operación exitosa!</span>
         <p>{{session('status')}}</p>
       </div>

     </div>
   </div>
   <div class="col s3">
   </div>

 </div>

@endif
