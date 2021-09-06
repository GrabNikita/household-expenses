export default class ObjectTool {
    static isEntity(variable) {
        return this.isObject(variable) && variable.hasOwnProperty('id');
    }

    static isObject(variable) {
        return typeof variable === 'object' && variable !== null;
    }
}
