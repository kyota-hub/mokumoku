<template>
  <v-app>
    <v-container fill-height fluid>
      <v-row align="center" justify="center">
        <v-col cols="6">
          <v-card elevation="4">
            <v-row align="center" justify="center">
              <v-col cols="6">
                <p>ログイン</p>
                <!-- テキストエリア -->
                <v-text-field
                  v-model="param.title"
                  @input="inputDataShow(param.title)"
                  label="input"
                  solo
                ></v-text-field>
              </v-col>
            </v-row>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </v-app>
</template>

<script>

import Entity from "../js/index";

export default {
  name: "Login",

  // data
  data: () => ({
    // apiからデータ取得
    param: new Entity(),
  }),

  methods: {
    // 入力した文字列をアラート表示させる
    inputDataShow(inputData) {
      console.log(inputData);
    },
  },

  created() {
    console.log(this.param);
  },
};
</script>
