function incrementCount(id) {
  fetch(`/increment-count/${id}`, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
  }).then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  }).then(data => {
    document.getElementById('countButton').innerHTML = `Count (${data.count})`;
  }).catch(error => {
    console.error('There was an error:', error);
  });
}
