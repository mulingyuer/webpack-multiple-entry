/*
 * @Author: mulingyuer
 * @Date: 2022-12-18 19:07:38
 * @LastEditTime: 2023-03-11 14:08:47
 * @LastEditors: mulingyuer
 * @Description: index入口文件
 * @FilePath: \webpack-multiple-entry\src\pages\home\index.ts
 * 怎么可能会有bug！！！
 */
import "./style.scss";

Promise.resolve().then(() => {
  console.log(131);
});

const a = {
  name() {
    console.log(111);
  },
};

class b {
  age() {
    return 1;
  }
}
