(function(){
	angular.module('app')
			.factory('NoteService', function(Curr){
				var notes = [
					{title: 'title', text: 'Text'},
					{title: 'title1', text: 'Text1'},
					{title: 'title2', text: 'Text2'},
					{title: 'title3', text: 'Text3'},
					{title: 'title4', text: 'Text4'}
				];

				var current = {note: null};
				var currentNote = null;

				var service = {
					getNotes		: getNotes,
					saveCurrent		: saveNote,
					createEmptyNote	: createEmpty,
					getCurrentNote	: getCurrentNote,
					current		: current
				};

				return service;

				function getNotes(){
					return notes;
				}

				function createEmpty()
				{
					console.log('createEmpty')
					console.log(currentNote);
					service.currentNote = {
						title	: '',
						text	: ''
					};
					current.note = {
						title	: '',
						text	: ''
					};
				}

				function getCurrentNote()
				{
					return currentNote;
				}

				function saveNote(currentNote)
				{
					notes.push(currentNote);
					currentNote = false;
				}
			});
})()

