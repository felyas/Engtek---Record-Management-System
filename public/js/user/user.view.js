const toast = document.getElementById("toast");
const closeToastBtn = document.getElementById("close-toaster-btn");

let timeoutID;

if (toast) {
  timeoutID = setTimeout(() => {
    toast.classList.add('hidden');
    clearTimeout(timeoutID);
  }, 3000);

  closeToastBtn.addEventListener('click', function () {
    clearTimeout(timeoutID);
    toast.classList.add('hidden');
  });
}

// console.log(1);
// DELETE USER FEATURE
const deleteBtns = document.querySelectorAll('.delete-link');
const deleteUserModal = document.getElementById('delete-user-modal');
const cancelModalBtn = document.getElementById('cancel-modal-btn');

deleteBtns.forEach(btn => {
  btn.addEventListener('click', function() {
    let userId = this.dataset.id;
    
    deleteUserModal.classList.remove('hidden');

    const hiddenInput = document.getElementById('hidden-input').value = userId;
    
  });
});

cancelModalBtn.addEventListener('click', () => {
  deleteUserModal.classList.add('hidden');
})





