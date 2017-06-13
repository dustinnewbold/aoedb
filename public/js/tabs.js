var tabs = document.querySelectorAll('.menu a');

for ( var i = 0; i < tabs.length; i++ ) {
	var tab = tabs[i];
	tab.addEventListener('click', function() {
		var activeTab = document.querySelector('.menu .active');
		activeTab.classList.remove('active');
		this.parentNode.classList.add('active');

		var activeContent = document.querySelector('.content > .active');
		activeContent.classList.remove('active');
		activeContent.classList.add('hide');

		var target = 'content-' + this.hash.substr(1),
			targetContent = document.getElementById(target);
		targetContent.classList.remove('hide');
		targetContent.classList.add('active');
	});
}