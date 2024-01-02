   <div id="home" class="tab-pane fade in active">
    

         

           <div class="form-group"> 
                     {{ Form::label('name', trans('admin.name'))  }}
                    {{ Form::text('title_name_en',$VisionMission->title_name_en,['class'=>'form-control title_name_en'])  }}
                     </div> 
 
 <div class="form-group"> 
              
                     {{ Form::label('number', trans('admin.number'))  }}
                    {{ Form::text('title_name_ar',$VisionMission->title_name_ar,['class'=>'form-control title_name_ar'])  }}
                     </div> 
            

    </div>
