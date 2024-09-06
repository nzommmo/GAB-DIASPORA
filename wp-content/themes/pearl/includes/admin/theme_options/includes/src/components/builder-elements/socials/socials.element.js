export class SocialsElementController{
    constructor($mdDialog){
        this.$mdDialog = $mdDialog;

        if(angular.isUndefined(this.element)) {
            this.element = {}
        }

        if(angular.isUndefined(this.element.data)) {
            this.element.data = {}
        }
    };

    saveElement(element){
        this.$mdDialog.hide(element);
    }

    cancel() {
        this.$mdDialog.cancel();
    }

}
