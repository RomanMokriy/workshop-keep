(function(){
	angular.module('app')
			.factory('NoteService', function($http){
				var emptyNote = false;

				var service = {
					getNotes		: getNotes,
					saveNote		: saveNote,
					createEmptyNote	: createEmpty
				};

				return service;

				function getNotes(){
					return $http.get('/note')
							.then(function (response) {
								return response.data
							})
							.catch(function (response){
								alert(response);
								return true;
							});
				}

				function createEmpty(){
					return {
						title	: '',
						text	: ''
					};
				}

				function saveNote(Note){
					return $http.post('/note', Note)
							.then(function (response) {
								return response.data
							})
							.catch(function (error){
								alert(response);
								return true;
							});
				}
			});
})()

