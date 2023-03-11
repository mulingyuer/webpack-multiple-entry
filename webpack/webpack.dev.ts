/*
 * @Author: mulingyuer
 * @Date: 2022-12-18 20:49:25
 * @LastEditTime: 2023-03-11 12:33:34
 * @LastEditors: mulingyuer
 * @Description: webpack dev配置
 * @FilePath: \webpack-multiple-entry\webpack\webpack.dev.ts
 * 怎么可能会有bug！！！
 */
import type { Configuration } from "webpack";
import { merge } from "webpack-merge";
import common from "./webpack.common";

export default merge(common, {
  mode: "development",
  devtool: "eval", //控制是否生成sourcemap
  output: {
    filename: `pages/[name].js`,
  },
  watch: true, //监听任何已解析文件的更改
  watchOptions: {
    aggregateTimeout: 600, //600ms内可以重复保存
    poll: 1000, // 每秒检查一次变动
    ignored: ["**/node_modules"], //忽略模块文件夹
  },
} as Configuration);
