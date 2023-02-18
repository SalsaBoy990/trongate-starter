/*
*  Ajax search in entries action
*
* */
export function ajaxSearchData() {

    const config = {
        method: 'GET', // *GET, POST, PUT, DELETE, etc.
        mode: 'same-origin', // no-cors, *cors, same-origin
        cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
        credentials: 'same-origin', // include, *same-origin, omit
        headers: {
            'Content-Type': 'application/json'
            // 'Content-Type': 'application/x-www-form-urlencoded',
        },
        redirect: 'follow', // manual, *follow, error
        referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
        // body: JSON.stringify(params) // body data type must match "Content-Type" header
    };

    return {
        searchTerm: '',
        panelOpen: false,
        count: 0,
        results: [],

        searchByTitle(apiPath, columnName = 'title') {
            if (this.searchTerm.length > 3) {
                const key = columnName + ' LIKE';
                let args = {};
                args[key] = '%' + this.searchTerm + '%';

                const queryParams = new URLSearchParams(args);

                fetch(apiPath + '?' + queryParams.toString(), config)
                    .then((response) => response.json())
                    .then((data) => {
                        console.log(data);
                        this.panelOpen = true;
                        this.results = data;
                        this.count = data.length;

                    });
            } else {
                // this.searchTerm = '';
                this.count = 0;
                this.panelOpen = false;
                this.results = [];
            }
        },

        clearSearch() {
            this.searchTerm = '';
            this.count = 0;
            this.panelOpen = false;
            this.results = [];
        },

        togglePanel() {
            this.panelOpen = !this.panelOpen;
        }
    }
}
