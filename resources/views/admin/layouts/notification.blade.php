
<style>
    #alertContainer .alert {
      position: fixed;
      top: 20px;
      right: 20px;
      padding: 10px;
      border-radius: 4px;
      color: black;
      font-weight: bold;
    }
    
    #alertContainer .success {
      background-color: #28a745;
    }
    
    /* Add more CSS classes for different alert types if needed */
  </style>

<div id="alertContainer"></div>


<script>
// Function to display the alert message
function showAlert(message, type) {
    var alertDiv = document.createElement('div');
    alertDiv.className = 'alert ' + type;
    alertDiv.innerHTML = message;
    document.getElementById('alertContainer').appendChild(alertDiv);

    // Automatically remove the alert after 3 seconds
    setTimeout(function() {
      alertDiv.remove();
    }, 3000);
  }


  @if(Session::has('success'))

//   showAlert("{{ Session::get('success') }}",'success');
showAlert("{{ Session::get('success') }}", 'success');

  @endif




</script>