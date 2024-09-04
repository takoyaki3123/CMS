import * as bootstrap from 'bootstrap';
export const openModal = (id) => {
  const modalContainer = document.querySelector("#"+id);
  const modal = new bootstrap.Modal(modalContainer);
  modal.show();
}
