require('./bootstrap');




$(document).ready(function() {
    $('#countButton').click(function() {
      $.ajax({
        type: 'POST',
        url: '{{ route("increment-count") }}',
        data: { _token: '{{ csrf_token() }}' },
        success: function(response) {
          $('#count').text(response.count);
        }
      });
    });
  });