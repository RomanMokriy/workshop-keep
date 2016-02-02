(function(){
	angular.module('app')
			.factory('NoteService', function($http){
				var emptyNote = false;

				var service = {
					getNotes		: getNotes,
					saveNote		: saveNote,
					deleteNote		: deleteNote,
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
						content	: ''
					};
				}

				function saveNote(Note){
					if(Note.id)
					{
						return $http.put('/note/' + Note.id, Note)
							.then(function (response) {
								return response.data
							})
							.catch(function (error){
								alert(response);
								return true;
							});
					}

					return $http.post('/note', Note)
							.then(function (response) {
								return response.data
							})
							.catch(function (error){
								alert(response);
								return true;
							});
				}

				function deleteNote(Note){
					if(Note.id)
					{
						return $http.delete('/note/' + Note.id)
							.then(function (response) {
								return response.data
							})
							.catch(function (error){
								alert(response);
								return true;
							});
					}
				}
			});
})()

