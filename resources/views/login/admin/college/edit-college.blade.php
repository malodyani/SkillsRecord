
@include('login.header')
@include('login.slider') 

<div class="col-lg-12">
                    
<div class="row">
                <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>

                    <h1 class="page-header"></h1>
                </div>
              
         
            <div class="panel panel-default">
                        <div class="panel-heading">
تعديل الكلية                        </div>
                        <div class="panel-body">
                        <div class="col-lg-12">  
 
<form action="edit-college" method="post">
@csrf
    <input hidden="" type="text" name="id" value="{{$college->id}}">
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">اسم الكلية </label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="name" value="{{$college->name}}">
    			                                        @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
								@endif
    </div>
</div>
    <div class="form-group row">
    <div class="col-xs-offset-3">
    <button type="submit" class="btn btn-success">حفظ</button>
    <button type="button" class="btn">إلغاء</button>
</div>
    </div>

            </div>
            </div>
</form>

            </div>
            </div>
                    @include('login.footer')
