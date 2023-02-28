const $form = document.querySelector('form');

function showMsg(type = "err", txt) {
  const msg = document.createElement("div");

  if (type === "err") {
    msg.innerHTML = `<h3 err>${txt}</h3>`;
  } else {
    msg.innerHTML = `<h3 complete>${txt}</h3>`;
  }

  $form.append(msg);

  setTimeout(() => {
    msg.remove();
  }, 4000);
}