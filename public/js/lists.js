const form = document.querySelector('#list-form');
const listSelector = document.querySelector('#lists');

const handleSelectorChange = () => {
  form.submit();
};

listSelector.addEventListener('change', handleSelectorChange);
