Wee.fn.make('common', {
	init: function() {
		this.taskFunctions();
		this.taskDelete();
		this.taskComplete();
	},
	taskFunctions: function() {
		$.events.on({
			'ref:task': {
				click: function() {
					$('ref:taskCheckMark', this).toggle();
				},
				mouseenter: function() {
					$('ref:taskView', this).addClass('-is-active');
					$('ref:taskDelete', this).addClass('-is-active');
				},
				mouseleave: function() {
					$('ref:taskView', this).removeClass('-is-active');
					$('ref:taskDelete', this).removeClass('-is-active');
				}
			},
			'ref:taskView': {
				click: function(e) {
					e.stopImmediatePropagation();
				}
			}
		});
	},
	taskDelete: function() {
		$('ref:taskDelete').on('click', function(e) {
			Wee.data.request({
				url: '/task/delete/' + $(this).parent().data('id')
			});

			e.stopPropagation();

			location.reload();
		});
	},
	taskComplete: function() {
		$('ref:task').on('click', function(e, el) {
			Wee.data.request({
				url: '/task/update/' + $(el).data('id')
			});
		});
	}
});