#
# Cookbook Name:: gsa_ads
# Recipe:: platform
#
# Copyright 2015, Aquilent, Inc
# See https://github.com/Aquilent/drug-adverse-event-browser/blob/test/LICENSE.txt
#
# 
#

OS_PLATFORM_INFO = <<PLATFORM_INFO
Installing gsa-ads platform on the following OS:
    os=#{node['platform']}
    os_family=#{node['platform_family']}
    os_version=#{node['platform_version']}
PLATFORM_INFO

Chef::Log.info(OS_PLATFORM_INFO)

gsa_ads_platform "platform" do
    action :install
end

