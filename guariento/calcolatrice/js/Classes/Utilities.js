export class Utilities {
  isAValidIntegerNumber(str) {
    return str.search(/^\d+$/) > -1 ? true : false;
  }
}
