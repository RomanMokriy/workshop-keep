(function(){
	angular.module('app')
			.factory('NoteService', function(){
				var notes = [
					{title: 'title', text: 'Text'},
					{title: 'title1', text: 'Text1'},
					{title: 'title2', text: 'Text2'},
					{title: 'title3', text: 'Text3'},
					{title: 'title4', text: 'Text4'}
				];

				var emptyNote = false;

				var service = {
					getNotes		: getNotes,
					saveNote		: saveNote,
					createEmptyNote	: createEmpty
				};

				return service;

				function getNotes(){
					return notes;
				}

				function createEmpty(){
					return {
						title	: '',
						text	: ''
					};
				}

				function saveNote(Note){
					notes.push(Note);
				}
			});
})()

