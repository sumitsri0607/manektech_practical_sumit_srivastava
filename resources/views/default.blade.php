<!DOCTYPE html>
<html>
<head>
    <title>Sumit Srivastava</title>
    @livewireStyles
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.standalone.min.css" />
    
    <link href="{{ asset('wizard.css') }}" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    
<div class="container">
    
    <div class="card">
      <div class="card-header">
        Sumit Srivastava Form wizard

      </div>
      <div class="card-body">
        <livewire:wizard />
      </div>
    </div>
        
</div>
    
</body>
 
@livewireScripts
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('js/app.js') }}" ></script>
  
<script>
    $(document).ready(function() {
        $('select#country_id').change(function() {
            console.log('Sumit');
           var id = $(this).val();
            $.ajax({
                url:"{{ route('ajaxdata.get_state')}}",
                type: 'post',
                dataType: 'json',
                data:{id:id,"_token": "{{ csrf_token() }}"},
                success:function(result)
                { 
                    $('#state_id').html(result);
                }
            });
        });

        $('select#state_id').change(function(){
            var id = $(this).val();
            $.ajax({
                url:"{{ route('ajaxdata.get_city')}}",
                type: 'post',
                dataType: 'json',
                data:{id:id,"_token": "{{ csrf_token() }}"},
                success:function(result)
                { 
                    $('#city_id').html(result);
                }
            });
        });

        $('.datepicker').datepicker({
                    dateFormat: "Y-m-d",
                    todayHighlight: true,
        });


    });
</script>
</html>