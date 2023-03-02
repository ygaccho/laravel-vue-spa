<script setup>
  import Button from './Button.vue'
  // ToDo : ダミーデータは、for文で回して書く
  const tasks = [
    {number: 1, title: '仮のタイトル1', content: '仮の内容1', personInCharge: '仮の担当者1'},
    {number: 2, title: '仮のタイトル2', content: '仮の内容2', personInCharge: '仮の担当者2'},
    {number: 3, title: '仮のタイトル3', content: '仮の内容3', personInCharge: '仮の担当者3'},
  ]
</script>

<template>
  <v-table>
    <thead>
      <tr>
        <th>番号</th>
        <th>タイトル</th>
        <th>内容</th>
        <th>担当者</th>
        <th>詳細</th>
        <th>編集</th>
        <th>削除</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="task in tasks" key="task.number">
        <th>{{ task.number }}</th>
        <td>{{ task.title }}</td>
        <td>{{ task.content }}</td>
        <td>{{ task.personInCharge }}</td>
        <td><Button :link="'/tasks/' + task.number" name="詳細" /></td>
        <td><Button :link="'/tasks/' + task.number + '/edit'" name="編集" /></td>
        <td><Button name="削除" /></td>
      </tr>
    </tbody>
  </v-table>
</template>
