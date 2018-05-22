@if ($errors->any())
    <div class="row">
      <div class="col s3">
      </div>
       <div class="col s6 m6">
         <div class="card red darken-1">
           <div class="card-content white-text">
             <span class="card-title">¡Hubo errores!</span>
             <p>
               <ul>
                 @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
                 @endforeach
               </ul>
             </p>
           </div>
         </div>
       </div>
       <div class="col s3">
       </div>
     </div>
@endif
